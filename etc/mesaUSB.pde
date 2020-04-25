/// mesaUSB.pde
/// some rights reserved... 
/// Atribuicao-Uso Nao-Comercial-Compartilhamento pela mesma Licenca 2.5 Brasil
/// Attribution-Noncommercial-Share Alike 2.5
/// 
/// http://creativecommons.org/licenses/by-nc-sa/2.5/
/// http://creativecommons.org/licenses/by-nc-sa/2.5/br/
///
/// Jose Henrique Padovani 2007


/// requires SimpleMessageSystem. (i.e not translated do the Messenger lib.)

#include <SimpleMessageSystem.h>

int bit1 = 0;          // store bit1
int bit2 = 0;          // store bit2
int bit3 = 0;          // store bit3
int bit4 = 0;          // store bit4
int vetor[48];         // 48 bits array to store the 3 multiplexers data
int a = 0;             // sore the value being read

void setup()
{
  pinMode(8, OUTPUT);   // pin 8 in output mode
  pinMode(9, OUTPUT);   // pin 9 in output mode
  pinMode(10, OUTPUT);  // pin 10 in output mode
  pinMode(11, OUTPUT);  // pin 11 in output mode
  pinMode(12, INPUT);   // pin 12 in input mode
  Serial.begin(115200); // Baudrate
}

void loop()
{
  if (messageBuild() > 0) {  
    lemultiplex();        
  }
}

void lemultiplex()            // function to read pins connected to the multiplexer
{	                      // and send its values through SimpleMessageSystem lib

  for (int i=0; i<16; i++) {  // counts from 0 to 15 or 0000 to 1111
    if ((i & 1) == 1){        // bit 1
      bit1 = HIGH;
    }
    else{
      bit1 = LOW;
    }
    if ((i & 2) == 2){        // bit 2
      bit2 = HIGH;
    }
    else{
      bit2 = LOW;
    }
    if ((i & 4) == 4){        // bit 3
      bit3 = HIGH;
    }
    else{
      bit3 = LOW;
    }
    if ((i & 8) == 8){        // bit 4
      bit4 = HIGH;
    }
    else{
      bit4 = LOW;
    }
    digitalWrite(8,bit1);       // bit1->pin8, bit2->pin9, bit3->pin10, bit4->pin11
    digitalWrite(9,bit2);       
    digitalWrite(10,bit3);
    digitalWrite(11,bit4);
    vetor[i] = analogRead(0);                // vetor[0-15]->multiplexer1 - potentiometers
    vetor[(i+16)] = analogRead(1);           // vetor[16-31]->multiplexer2 - potentiometers
    vetor[(i+32)] = abs(digitalRead(12)-1);  // vetor[32-48->multiplexer3 - buttons/pedals
  } // vetor
  for (int n=0; n<48; n++){                // read only what potentiometers/button connected 
    if (n<24 || n>31){    
      a = vetor[n];                        // sends value to a 
      messageSendInt(a);                   // send a to message 
    } 
  }					    	
  messageEnd();            // send the message
}
