r,d,x= gets.split.map(&:to_i)

10.times do
  a= r*x - d
  puts a
  x=a
end
