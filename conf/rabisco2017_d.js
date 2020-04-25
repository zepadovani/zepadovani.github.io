/* sketch responsive et fullscreen */
// var fontA;
//
var z=99;
var a,b,c,d;
var  e,f,i;
var g=0;
var  w;
var  h;
var  x1,y1,l1,x2,y2,l2,x3,y3,l3,x4,y4,l4;
var  linksize=13;
var  thislink;
var  trampp = 15;
var  trampn = -15;
var  curvep = 14;
var  curven = -14;
var  m=0;
var colorp;
var saturp;
var brightp = 100;
var alphap;
var fps = 25;
var lastTime = 0;
var thisTime = 0;
var difTime = 0;
var difFrames = 1;

//var txcolor = color(50);


function preload() {
  fontA = loadFont('avenir-next-lt-pro-light.otf');
}

function setup() {
  w=windowWidth;
  h=windowHeight;
  lastTime = millis();
  thisTime = millis();
  createCanvas(w, h);
  a=random(w);
  b=random(h);
  e=a;
  f=b;
restart();

  setInterval(desenha2, int(1000/fps));
}


function desenha() {
  push();
  //setFrameRate(26);
  g++;
  trampp = random(1.0,15);
  trampn = -trampp;
  curvep = random(-13,13);
  curven = -curvep;
  fill(255,0);
  c=a+random(trampn,trampp);
  d=b+random(trampn,trampp);
  if(g>900){
  g=0;}
  if(g==0||g==150||g==151||g==252||g==700||g==701){
  c=random(w);
  d=random(h);
  curvep = random(w*0.05,w*0.07)*(float(round(random(0,1)))*2-1);
  curven = random(w*0.05,w*0.07)*(float(round(random(0,1)))*2-1);
  }
  strokeWeight(random(1,1.4));
  colorMode(HSB,255);
  //colorp = (colorp + random(-0.5,0.5))%255;
  saturp = (saturp + random(-2.0,2.0))%50;
  brightp = (brightp + random(-4.0,4.0))%100;
  alphap = (alphap + random(-2.0,2.0))%50;
  stroke(int(colorp + random(-35,35))%255, int(saturp) + 100, int(brightp)  + 80, (int(alphap + 45))%255);
  bezier(a,b,a+random(curven,curvep),b+random(curven,curvep),c+random(curven,curvep),d+random(curven,curvep),c,d);
  if(c>w){
  a=(c-w);}else if (c<0){
  a=w-abs(c);}else{
  a=c;}
  if(d>(h-4)){
  b=(d-h);
  }else if(d<0){
  b=h-4-abs(d);}else{
  b=d;}
  pop();
//  p5.requestAnimationFrame();
  }

function desenha2(){
  desenha();
  thisTime = millis();
  difTime = thisTime - lastTime;
  difFrames = int((difTime/1000)/fps);
  if( difTime > (1000/fps) ){

    for(i==0; i++; i<difFrames){
      desenha();
    }
  };

  lastTime = thisTime;
}

// 2. on redimensionne le sketch quand la fenÃªtre est redimensionnÃ©e aussi
function windowResized() {
  w=windowWidth;
  h=windowHeight;
  lastTime = millis();
  thisTime = millis();
	resizeCanvas(w, h);
  a=random(w);
  b=random(h);
  e=a;
  f=b;

  restart();
}


function restart(){
  // 1. on donne au sketch la taille de la fenÃªtre

  colorp = int(random(255));
  saturp = 203 + random(40);
  brightp = random(80)+20;
  alphap = random(50)+10;

  colorMode(HSB,255);
  txcolor = color(random(50),random(50)+50,random(80)+150);
  txcolorb = color(hue(txcolor)+random(-40,40),20,200);
  txcolorc = color(hue(txcolor),60,245);
  background(random(255),15,50);

  push();
  fill(txcolor);
  translate(w-45,10,33);
  rotate(PI/2);
  textFont(fontA, 30);
  text("josé henrique padovani", 0, 0);
  pop();

  push();
  fill(txcolor);
  translate(w-525,h-6);
  textFont(fontA, 11);
  text("alguns direitos reservados / some rights reserved >> http://creativecommons.org/licenses/by-nc-sa/3.0/", 0, 0);
  pop();

  push();
  fill(txcolor);
  translate(5,h-6);
  textFont(fontA, 11);
  text("recarregue a página para limpar / reload the page to clean it", 0, 0);
  pop();

   changeColorTo();
}


function changeColorTo(){

    var anchors = document.getElementsByTagName('a');
    for (var i = 0; i<anchors.length; i++){
        anchors[i].style.color = txcolorc;
    }

    var anchors = document.getElementsByTagName('h1');
    for (var i = 0; i<anchors.length; i++){
        anchors[i].style.color = txcolorb;
    }

    var anchors = document.getElementsByTagName('h2');
    for (var i = 0; i<anchors.length; i++){
        anchors[i].style.color = txcolorb;
    }

    var anchors = document.getElementsByTagName('h3');
    for (var i = 0; i<anchors.length; i++){
        anchors[i].style.color = txcolorc;
    }
}
