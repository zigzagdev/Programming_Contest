n=gets.to_i
d,x=gets.split(" ").map &:to_i

result=0
n.times{
  a=gets.to_i
  result +=(d+a-1)/a
}
p result+x
