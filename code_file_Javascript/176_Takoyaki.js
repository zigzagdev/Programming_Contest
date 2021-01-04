function main(input){
    const arr = input.split(" ");
    const n = parseInt(arr[0], 10),
        x = parseInt(arr[1], 10),
        t = parseInt(arr[2], 10);

    console.log(t * (Math.ceil(n/x)));

}

main(require('fs').readFileSync('/dev/stdin', 'utf8'));