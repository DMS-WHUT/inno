 document.onkeydown = function(e) {
		var pressEvent = e || window.event;
		var keyCode = '';
		if(pressEvent.keyCode){
			keyCode = pressEvent.keyCode;
		}else if(pressEvent.charCode){
			keyCode = pressEvent.charCode;
		}else if(pressEvent.which){
			keyCode = pressEvent.which;
		}

		switch(keyCode){
	 case 81:
	 {var musicfile='/inno/music/C3.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key0').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key0').style.backgroundColor=''",100);
	 break;}
	  case 87:
	 {var musicfile='/inno/music/D3.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key1').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key1').style.backgroundColor=''",100);
	 break;}
	  case 69:
	 {var musicfile='/inno/music/E3.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key2').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key2').style.backgroundColor=''",100);
	 break;}
	  case 82:
	 {var musicfile='/inno/music/F3.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key3').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key3').style.backgroundColor=''",100);
	 break;}
	  case 84:
	 {var musicfile='/inno/music/G3.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key4').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key4').style.backgroundColor=''",100);
	 break;}
	  case 89:
	 {var musicfile='/inno/music/A3.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key5').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key5').style.backgroundColor=''",100);
	 break;}
	  case 85:
	 {var musicfile='/inno/music/B3.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key6').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key6').style.backgroundColor=''",100);
	 break;}
	  case 90:
	 {var musicfile='/inno/music/C4.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key7').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key7').style.backgroundColor=''",100);
	 break;}
	  case 88:
	 {var musicfile='/inno/music/D4.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key8').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key8').style.backgroundColor=''",100);
	 break;}
	  case 67:
	 {var musicfile='/inno/music/E4.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key9').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key9').style.backgroundColor=''",100);
	 break;}
	  case 86:
	 {var musicfile='/inno/music/F4.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key10').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key10').style.backgroundColor=''",100);
	 break;}
	  case 66:
	 {var musicfile='/inno/music/G4.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key11').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key11').style.backgroundColor=''",100);
	 break;}
	  case 78:
	 {var musicfile='/inno/music/A4.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key12').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key12').style.backgroundColor=''",100);
	 break;}
	  case 77:
	 {var musicfile='/inno/music/B4.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key13').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key13').style.backgroundColor=''",100);
	 break;}
	  case 188:
	 {var musicfile='/inno/music/C5.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key14').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key14').style.backgroundColor=''",100);
	 break;}
	  case 191:
	 {var musicfile='/inno/music/D5.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key15').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key15').style.backgroundColor=''",100);
	 break;}
	  case 76:
	 {var musicfile='/inno/music/E5.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key16').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key16').style.backgroundColor=''",100);
	 break;}
	  case 186:
	 {var musicfile='/inno/music/F5.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key17').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key17').style.backgroundColor=''",100);
	 break;}
	  case 79:
	 {var musicfile='/inno/music/G5.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key18').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key18').style.backgroundColor=''",100);
	 break;}
	  case 56:
	 {var musicfile='/inno/music/A5.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key19').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key19').style.backgroundColor=''",100);
	 break;}
	  case 48:
	 {var musicfile='/inno/music/B5.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key20').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key20').style.backgroundColor=''",100);
	 break;}
	  case 97:
	 {var musicfile='/inno/music/C6.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key21').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key21').style.backgroundColor=''",100);
	 break;}
	  case 99:
	 {var musicfile='/inno/music/D6.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key22').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key22').style.backgroundColor=''",100);
	 break;}
	  case 101:
	 {var musicfile='/inno/music/E6.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key23').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key23').style.backgroundColor=''",100);
	 break;}
	  case 102:
	 {var musicfile='/inno/music/F6.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key24').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key24').style.backgroundColor=''",100);
	 break;}
	  case 104:
	 {var musicfile='/inno/music/G6.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key25').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key25').style.backgroundColor=''",100);
	 break;}
	  case 111:
	 {var musicfile='/inno/music/A6.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key26').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key26').style.backgroundColor=''",100);
	 break;}
	  case 109:
	 {var musicfile='/inno/music/B6.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('key27').style.backgroundColor='blue';
	 setTimeout("document.getElementById('key27').style.backgroundColor=''",100);
	 break;}
	  case 50:
	 {var musicfile='/inno/music/DB3.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb1').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb1').style.backgroundColor=''",100);
	 break;}
	  case 51:
	 {var musicfile='/inno/music/EB3.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb2').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb2').style.backgroundColor=''",100);
	 break;}
	  case 53:
	 {var musicfile='/inno/music/F03.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb3').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb3').style.backgroundColor=''",100);
	 break;}
	 case 54:
	 {var musicfile='/inno/music/G03.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb4').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb4').style.backgroundColor=''",100);
	 break;}
	 case 55:
	 {var musicfile='/inno/music/BB3.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb5').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb5').style.backgroundColor=''",100);
	 break;}
	 case 83:
	 {var musicfile='/inno/music/DB4.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb6').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb6').style.backgroundColor=''",100);
	 break;}
	 case 68:
	 {var musicfile='/inno/music/EB4.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb7').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb7').style.backgroundColor=''",100);
	 break;}
	 case 71:
	 {var musicfile='/inno/music/F04.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb8').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb8').style.backgroundColor=''",100);
	 break;}
	 case 72:
	 {var musicfile='/inno/music/G04.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb9').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb9').style.backgroundColor=''",100);
	 break;}
	 case 74:
	 {var musicfile='/inno/music/BB4.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb10').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb10').style.backgroundColor=''",100);
	 break;}
	 case 190:
	 {var musicfile='/inno/music/DB5.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb11').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb11').style.backgroundColor=''",100);
	 break;}
	 case 75:
	 {var musicfile='/inno/music/EB5.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb12').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb12').style.backgroundColor=''",100);
	 break;}
	 case 73:
	 {var musicfile='/inno/music/F05.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb13').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb13').style.backgroundColor=''",100);
	 break;}
	 case 80:
	 {var musicfile='/inno/music/G05.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb14').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb14').style.backgroundColor=''",100);
	 break;}
	 case 57:
	 {var musicfile='/inno/music/BB5.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb15').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb15').style.backgroundColor=''",100);
	 break;}
	 case 98:
	 {var musicfile='/inno/music/DB6.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb16').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb16').style.backgroundColor=''",100);
	 break;}
	 case 100:
	 {var musicfile='/inno/music/EB6.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb17').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb17').style.backgroundColor=''",100);
	 break;}
	 case 103:
	 {var musicfile='/inno/music/F06.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb18').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb18').style.backgroundColor=''",100);
	 break;}
	 case 105:
	 {var musicfile='/inno/music/G06.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb19').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb19').style.backgroundColor=''",100);
	 break;}
	 case 106:
	 {var musicfile='/inno/music/BB6.mp3'
	 playMusic=new Audio(musicfile);
     playMusic.play();
	 document.getElementById('keyb20').style.backgroundColor='blue';
	 setTimeout("document.getElementById('keyb20').style.backgroundColor=''",100);
	 break;}
 }
		
		
	}
	
