package main

import (
    "fmt"
)

func main() {
    var a, b, c int
    fmt.Scan(&a, &b, &c)
    
    if (int(a * a) + int(b * b) < int(c * c)) {
      fmt.Println("Yes")
    } else {
      fmt.Println("No")
    }
}