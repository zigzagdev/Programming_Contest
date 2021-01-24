d,t,s= gets.chomp.split(" ").map(&:to_f)

if t>= d/s
  puts "Yes"
else
  puts "No"

end
