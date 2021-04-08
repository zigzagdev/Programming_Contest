a,b,c= gets.chomp.split(" ").map &:to_i

if(a == b && a == c)
  puts "No"
elsif(a == b || b == c || a == c)
  puts "Yes"
else
  puts "No"
end
