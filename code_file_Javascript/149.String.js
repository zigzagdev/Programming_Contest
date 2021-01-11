function main(input) {
    input = input.trim().split('\n');
    let [s,t]=input[0].trim().split(' ');
    console.log(t+s);
}

main(require("fs").readFileSync("/dev/stdin", "utf8"));