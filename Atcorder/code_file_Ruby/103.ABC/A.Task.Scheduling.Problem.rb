A,B,C=gets.split(" ").map &:to_i

array=[A,B,C]
S=array.max
K=array.min

puts S-K
