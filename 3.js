var s = '';
for(var i = 1; i <= 10 ; i++ ){
  for(var j = 1; j <= 10; j++){
    if(i== 1 || i==10 || j==1 || j==10){
      s += 'x';
    } else {
      s += ' ';
    }
  }
  s += '\n'
}
console.log(s);