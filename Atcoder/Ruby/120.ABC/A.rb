a,b,c=gets.split.map(&:to_i)

if b-a*c >0
  puts c
else
  b-a*c <0
  puts b/a
end
