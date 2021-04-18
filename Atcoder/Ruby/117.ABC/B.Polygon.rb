n=gets.to_i
d=gets.split(" ").map &:to_i

e=d.max
s=d.sort.reverse
t=s.drop(1)

if(e<t.sum)
  puts "Yes"
else
  puts "No"
end
