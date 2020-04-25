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
var colorp = round(random(10))*25;
var fr = 20;

function preload() {
  fontA = loadFont('conf/avenir-next-lt-pro-light.otf');
}

function setup() {
	// 1. on donne au sketch la taille de la fenÃªtre
  w=windowWidth;
  h=windowHeight;
	createCanvas(w, h);


  a=random(w);
  b=random(h);
  e=a;
  f=b;

  colorMode(HSB,255);
  background(20);

  push();
  fill(0,0,200,100);
  translate(w-45,10);
  rotate(PI/2);
  textFont(fontA, 30);
  text("josé henrique padovani", 0, 0);
  pop();

  push();
  fill(100,0,200,100);
  translate(w-525,h-6);
  textFont(fontA, 11);
  text("alguns direitos reservados / some rights reserved >> http://creativecommons.org/licenses/by-nc-sa/3.0/", 0, 0);
  pop();

  push();
  fill(100,0,200,100);
  translate(5,w-6);
  textFont(fontA, 11);
  text("recarregue a página para limpar / reload the page to clean it", 0, 0);
  pop();

  //
  // pushMatrix();

  //
  // textFont(fontA, 15);
  // //text("compositor/composer", 215, 0);
  // popMatrix();

  // textFont(fontA, 20);


// text("josé henrique padovani", 0, 0);

}

function draw() {
  setFrameRate(26);
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
  //strokeWeight(random(0.2,1.4));
  colorMode(HSB,255);
  stroke(int((colorp + random(90.0))%255), int((random(-100.0,100.0) + 150)%255), int((random(-50.0,50.0) + 100)%255), int((random(-90.0,90.0) + 100)%255));
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

  }

// 2. on redimensionne le sketch quand la fenÃªtre est redimensionnÃ©e aussi
function windowResized() {
	resizeCanvas(w, h);


  a=random(w);
  b=random(h);
  e=a;
  f=b;

  colorMode(HSB,255);
  background(20);

  push();
  fill(0,0,0,100);
  translate(w-45,10);
  rotate(PI/2);
  textFont(fontA, 30);
  text("josé henrique padovani", 0, 0);
  pop();

  push();
  fill(100,0,20,100);
  translate(w-525,h-6);
  textFont(fontA, 11);
  text("alguns direitos reservados / some rights reserved >> http://creativecommons.org/licenses/by-nc-sa/3.0/", 0, 0);
  pop();

  push();
  fill(100,0,20,100);
  translate(5,w-6);
  textFont(fontA, 11);
  text("recarregue a página para limpar / reload the page to clean it", 0, 0);
  pop();
}
