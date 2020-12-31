function Main(input){

    input[2]==input[3]&& input[4]==input[5] ? console.log("Yes"): console.log("No") ;}

Main(require("fs").readFileSync("/dev/stdin", "utf8"));