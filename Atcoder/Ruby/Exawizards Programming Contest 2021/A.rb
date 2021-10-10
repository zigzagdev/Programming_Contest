kes = gets.chomp

mori = kes.size

if mori == 3
  puts "0"+kes
elsif mori == 2
  puts "00"+kes
elsif mori == 1
  puts "000"+kes
else
  puts kes
end  
