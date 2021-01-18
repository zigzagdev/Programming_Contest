a,b,c=gets.chomp.split.map(&:to_i)
array=[a+b,b+c,a+c]

puts array.min
