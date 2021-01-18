function Main(input){
    for(let e of input){
        if (e == "7"){
            console.log("Yes");
            return;}
    }
    console.log("No");}

Main(require("fs").readFileSync("/dev/stdin", "utf8"));