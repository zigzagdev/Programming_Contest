mori,yama = gets.split(" ").map &:to_i

if mori % yama == 0
  puts 'YES'
else
  puts 'NO'
end  
