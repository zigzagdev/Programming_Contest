mori,yama = gets.split(".").map(&:to_i)

if (yama < 3)
  puts "#{mori}-"
elsif (yama < 7)
  puts "#{mori}"
else
  puts "#{mori}+"
end  
