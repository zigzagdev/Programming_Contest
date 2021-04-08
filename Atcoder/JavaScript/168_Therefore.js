function Main(input) {
    const tail =  Number(input) % 10
    switch(tail) {
        case 2:
        case 4:
        case 5:
        case 7:
        case 9:
            console.log('hon')
            break
        case 0:
        case 1:
        case 6:
        case 8:
            console.log('pon')
            break
        case 3:
            console.log('bon')
    }
}

Main(require("fs").readFileSync("/dev/stdin", "utf8"));