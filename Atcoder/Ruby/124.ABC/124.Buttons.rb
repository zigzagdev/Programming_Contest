a,b=gets.split(" ").map &:to_i

array=[a+b,a+(a-1),b+(b-1)]

puts array.max
