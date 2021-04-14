n=gets.to_i
v=gets.split(" ").map &:to_i
c=gets.split(" ").map &:to_i

count=0
n.times do |i|
  if(v[i]>c[i])
    count += v[i]-c[i]
  end
end
puts count
