/**
*  Pitch Detection using Auto Correlation.
*
*  Auto correlation multiplies each sample in a buffer by all
*  of the other samples. This emphasizes the fundamental
*  frequency.
*
*  Running the signal through a low pass filter prior to
*  autocorrelation helps bring out the fundamental frequency.
*
*  The visualization is a correlogram, which plots
*  the autocorrelations.
*
*  We calculate the pitch by counting the number of samples
*  between peaks.
*
*  Example by Jason Sigal and Golan Levin.
*/

let source, fft, lowPass;
var shape=false;


// center clip nullifies samples below a clip amount
var doCenterClip = false;
var centerClipThreshold = 0.0;

// normalize pre / post autocorrelation
var preNormalize = true;
var postNormalize = true;
var numnotes = 37; // range de notas (3 oitavas + 1 nota)
var notemin = 60;  // nota mínima (Dó4)
var width;  //variável para armazenar largura
var height; //variável para armazenar altura
var nota = ["C","C#","D","D#","E","F","F#","G","G#","A","A#","B"]; //nome das notas
var oct = [-1,0,1,2,3,4,5,6,7,8,9]; //oitavas
let pvals = [];
let avals = [];
var ix = 0;
var padleft = 40;
var wpadleft;
let level,amplitude;
var levelthreshold = 0.02;

function setup() {
  var canvas = createCanvas(windowWidth, windowHeight); //cria canvas do p5.js
  width = windowWidth;  //largura
  height = windowHeight;//altura
  frameRate(30); //frameRate
  canvas.parent('sketchdiv'); //div da página html onde o canvas p5.js será criado
  wpadleft = width-padleft; // área horizontal útil a desenhar (para não rabiscar em cima dos rótulos)

// iniciar arrays de amplitude e pitch
  for (let i = 0; i < wpadleft; i++) {
    pvals[i] = 0;
    avals[i] = 0;
  }

//iniciar fonte de áudio
  source = new p5.AudioIn();
  source.start();

// iniciar detector de amplitude
  amplitude = new p5.Amplitude();
  amplitude.setInput(source);
  amplitude.smooth(1);

//iniciar filtro passa baixa
  lowPass = new p5.LowPass();
  lowPass.disconnect();
  source.connect(lowPass);

//iniciar FFT
  fft = new p5.FFT();
  fft.setInput(lowPass);
}

//função de desenho, atualizada a cada frame
function draw() {
  var timeDomain = fft.waveform(1024, 'float32'); //FFT
  var corrBuff = autoCorrelate(timeDomain);       //autocorrelação
  var freq = findFrequency(corrBuff);             //retorna frequencia a partir de autocorrelação
  var note = noteFromPitch(freq);                 //convert frequencia para pitch (MIDI)
  let level = amplitude.getLevel();               //retorna o nível de amplitude
  strokeWeight(1);                                //espessura da linha de desenho
  ix = (ix+1)%wpadleft;                           //ponteiro que varre a área a desenhar a curva de pitch
  background(255);                                //gera fundo branco
  stroke(200);                                    //seta cor cinza clara para desenho
  var up=0;
  var noteheight = (height/numnotes);             //altura de retângulo p/ cada nota


  //faixas retangulares para cada nota
  for (var i = 0 ; i < (numnotes); i++){ // se for "nota branca" (sem alteração): quadrado mais claro, senão, mais escuro
    if((i%12==0)||(i%12==2)||(i%12==4)||(i%12==5)||(i%12==7)||(i%12==9)||(i%12==11)){
      fill(240);
    }
    else
    {fill(210);};
    stroke(200);
    rect(0,height - ((noteheight*(i+1))+up), width, noteheight);
    if(i%12==0){ //se for nota dó, cria linha mais escura de referência para separar oitavas
      stroke(0);
      line(0,height - ((noteheight*(i))+up),width,height - ((noteheight*(i))+up));
    };
  }

//i vai de 0 até o numero de notas para gerar rotulos/texto de cada faixa de altura
  for (var i = 0; i < (numnotes); i++){
    var pc = i%12;
    var thistext;//
    var xpos;
    thistext =  nota[pc] + str(floor((i+notemin)/12)-1); //texto/rótulo da nota
    if((pc==0)||(pc==2)||(pc==4)||(pc==5)||(pc==7)||(pc==9)||(pc==11)){
      xpos = 10;//margem à esquerda de notas sem alteração
    }
    else
    {
      xpos = 20; //margem à esquerda de notas com alteração
    };
    textSize(height/(numnotes*1.25)); // tamanho do texto é proporcional ao numero de notas
    noStroke(); //sem stroke para escrever rótulo das notas
    fill(60);//cor do texto
    text(thistext,xpos,height - ((noteheight*i)+1));
    //
  }

  //curvas não tem fill
  noFill();

//gate de amplitude: só armazena dados nos arrays se amplitude for maior que determinado nível de amplitude
  if(level>levelthreshold){
    pvals[ix] = note;
    avals[ix] = level;
  }
    else{
      pvals[ix] = 0;
      avals[ix] = 0
    };

    //desenha curva dos pitches detectados a cada quadro...
    for (var i = 0; i < wpadleft; i++) {
      var hval = pvals[i];;
      var nval = pvals[(i+1)%wpadleft];
      var lval1 = pvals[(i-1)%wpadleft];
      var lval2 = pvals[(i-2)%wpadleft];
      var lval3 = pvals[(i-3)%wpadleft];

      stroke(map(avals[i],0,0.2,100,0));
      strokeWeight(1.4); // espessura da linha de desenho dos pitches


      if((hval>0)&&((lval1==0)||(i==0))){
        beginShape(); //inicia linha
        shape = true;
      };

      if(hval>0){
        shape = true;
        var w = i+padleft;
        var h;

        if((lval3>0)&&(lval2>0)&&(lval1>0)&&(abs(pvals[i] - ((lval1+lval2+lval3)/3)) > 1)) {
          h = map(((lval1+lval2+lval3)/3)*0.9 + pvals[i]*0.1, notemin, notemin+numnotes, height, 0); //tentativa de criar média dos ultimos tres valores
        }else{
          h = map(hval, notemin, notemin+numnotes, height, 0);
        };
        curveVertex(w, h);
      };

      if((hval==0)&&(lval1>0)){
        endShape();
        shape=false;
      }

      if((hval>0)&&(i==(wpadleft-1))){
        endShape();
        shape=false;
      }





    }


  }



  // funcao de autocorrelação
  function autoCorrelate(timeDomainBuffer) {

    var nSamples = timeDomainBuffer.length;

    // pre-normalize the input buffer
    if (preNormalize){
      timeDomainBuffer = normalize(timeDomainBuffer);
    }

    // zero out any values below the centerClipThreshold
    if (doCenterClip) {
      timeDomainBuffer = centerClip(timeDomainBuffer);
    }

    var autoCorrBuffer = [];
    for (var lag = 0; lag < nSamples; lag++){
      var sum = 0;
      for (var index = 0; index < nSamples-lag; index++){
        var indexLagged = index+lag;
        var sound1 = timeDomainBuffer[index];
        var sound2 = timeDomainBuffer[indexLagged];
        var product = sound1 * sound2;
        sum += product;
      }

      // average to a value between -1 and 1
      autoCorrBuffer[lag] = sum/nSamples;
    }

    // normalize the output buffer
    if (postNormalize){
      autoCorrBuffer = normalize(autoCorrBuffer);
    }

    return autoCorrBuffer;
  }


  // Find the biggest value in a buffer, set that value to 1.0,
  // and scale every other value by the same amount.
  function normalize(buffer) {
    var biggestVal = 0;
    var nSamples = buffer.length;
    for (var index = 0; index < nSamples; index++){
      if (abs(buffer[index]) > biggestVal){
        biggestVal = abs(buffer[index]);
      }
    }
    for (var index = 0; index < nSamples; index++){

      // divide each sample of the buffer by the biggest val
      buffer[index] /= biggestVal;
    }
    return buffer;
  }

  // Accepts a buffer of samples, and sets any samples whose
  // amplitude is below the centerClipThreshold to zero.
  // This factors them out of the autocorrelation.
  function centerClip(buffer) {
    var nSamples = buffer.length;

    // center clip removes any samples whose abs is less than centerClipThreshold
    centerClipThreshold = map(mouseY, 0, height, 0,1);

    if (centerClipThreshold > 0.0) {
      for (var i = 0; i < nSamples; i++) {
        var val = buffer[i];
        buffer[i] = (Math.abs(val) > centerClipThreshold) ? val : 0;
      }
    }
    return buffer;
  }

  // Calculate the fundamental frequency of a buffer
  // by finding the peaks, and counting the distance
  // between peaks in samples, and converting that
  // number of samples to a frequency value.
  function findFrequency(autocorr) {

    var nSamples = autocorr.length;
    var valOfLargestPeakSoFar = 0;
    var indexOfLargestPeakSoFar = -1;

    for (var index = 1; index < nSamples; index++){
      var valL = autocorr[index-1];
      var valC = autocorr[index];
      var valR = autocorr[index+1];

      var bIsPeak = ((valL < valC) && (valR < valC));
      if (bIsPeak){
        if (valC > valOfLargestPeakSoFar){
          valOfLargestPeakSoFar = valC;
          indexOfLargestPeakSoFar = index;
        }
      }
    }

    var distanceToNextLargestPeak = indexOfLargestPeakSoFar - 0;

    // convert sample count to frequency
    var fundamentalFrequency = sampleRate() / distanceToNextLargestPeak;
    return fundamentalFrequency;
  }

  function noteFromPitch( frequency ) {
    var noteNum = 12 * (Math.log( frequency / 440 )/Math.log(2) );
    //return Math.round( noteNum ) + 69;
    return noteNum + 69;
  }

  function touchStarted() { getAudioContext().resume(); }
