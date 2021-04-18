a,b=gets.chomp.split(" ").map(&:to_i)
u = a-b*2
if  a-b*2>0
  puts u
else
  puts "0"
end
