const main = (input) => {
    input = input.split(' ');
    const X = parseInt(input[0], 10);
    const A = parseInt(input[1], 10);
    const B = parseInt(input[2], 10);

    if (X+A<B) {
        console.log("dangerous");
    }else if (A-B>=0) {
        console.log("delicious");
    }else{
        console.log("safe");
    }
}
main(require('fs').readFileSync('/dev/stdin', 'utf8'));