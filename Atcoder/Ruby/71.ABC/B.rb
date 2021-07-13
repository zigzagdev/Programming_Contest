kes = gets.chomp
yama = ('a'..'z').to_a

fuji = kes.split(//).sort
mori = fuji.uniq
evisjap = yama - mori

if (yama-mori==[])
  puts "None"
else
  puts evisjap[0]
end  
