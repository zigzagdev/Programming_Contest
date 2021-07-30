n,w=gets.split.map(&:to_i)
a = []
n.times do
  a.push(*gets.split.map(&:to_i))
end
x=a.min
puts (a.sum - x*a.size)

