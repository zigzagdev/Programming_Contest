a,b,c=gets.split(" ").map &:to_i

if(a*a+b+b*b<c*c)
  puts 'Yes'
else
  puts 'No'
end
