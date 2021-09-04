mori,yama = gets.split(" ").map &:to_s
moriyama = Array[mori,yama]

evis= moriyama.sort

if moriyama  == evis
  puts "Yes"
else
  puts "No"
end  
