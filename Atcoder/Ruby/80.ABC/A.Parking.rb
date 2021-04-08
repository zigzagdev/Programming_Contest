a,t,b=gets.split(" ").map &:to_i

if a*t <= b
  puts a*t
else
  puts b
end
