     /* @pjs font="emmentaler-18.otf"; */      

String typing = "";
//String sh = "E173";
String sh = "0038";
char[] chars;
int n;
void setup(){
  size (600,600);
  smooth();


  
  }
  
void draw(){
  background(255);
  fill(0);
  background(255);
  textFont(createFont("harmonia",32));
  fill(0);

//println(n);
//chars = Character.toChars(unhex(sh));
//ch = new String(chars);
//println(ch);
text("8", 10, 50);
//text(ch, 50, 50);

//int n = unhex(sh);
//char[] chars = Character.toChars(n);
//String ch = new String(chars);

  text("\uE173", 0, 100,100);

  }

  void keyPressed() {
      typing = typing + str(key);
}

void mousePressed() {
  typing = "";
}