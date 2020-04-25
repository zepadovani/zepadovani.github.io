     /* @pjs font="HarmoniaRomanNumeralsPT.ttf"; */      

String typing = "";

void setup(){
  size (600,600);
  smooth();


  
  }
  
void draw(){
  background(255);
  fill(0);
  background(255);
  textFont(createFont("harmonia",32));
  String t = "abcdefåß∂®ƒ®©´¨Å˝ÒÍ˝„ˆ¨˝°‡";
  float tw = textWidth(t);
  fill(0);
  text(t, 0, (height+32)/2);

  }

  void keyPressed() {
      typing = typing + str(key);
}

void mousePressed() {
  typing = "";
}

