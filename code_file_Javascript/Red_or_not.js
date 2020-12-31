function Main(input){
    var a = input.split("\n")[0];
    a = parseInt(a,10);
    var s = input.split("\n")[1];

    if (a >= 3200){
        console.log(s);
    }
    else {
        console.log("red");
    }
}


Main(require('fs').readFileSync('/dev/stdin', 'utf8'));
