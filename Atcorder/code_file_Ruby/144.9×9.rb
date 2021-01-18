a,b=gets.chomp.split(" ").map(&:to_i)

if a>9 || b>9
  puts -1
else
  puts a*b
end
