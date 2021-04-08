n=gets.to_i

z=n.times.map{gets.to_i}
max=z.max
t=max/2

puts z.inject(:+)-t

