n,d=gets.split.map(&:to_i)

count=0;
n.times do
  x,y=gets.split.map(&:to_i)
  if Math.sqrt(x**2+y**2) <= d
    count +=1
  else
    count +=0
  end
end
puts count
