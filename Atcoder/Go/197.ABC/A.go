package main

import (
    "fmt"
    "strings"
)

func main() {
    var a string
    fmt.Scan(&a)
    
    result := strings.Split(a, "")
    change := result[1] + result[2] + result[0]
    fmt.Println(change)
}