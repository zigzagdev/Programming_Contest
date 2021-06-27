a,b,c = gets.split(" ").map &:to_i

array = Array[a, b, c].sort

puts array[1]+array[2]
