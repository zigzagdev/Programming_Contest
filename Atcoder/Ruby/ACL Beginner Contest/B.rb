mori,yama,evis,jap = gets.split(" ").map &:to_i

if yama<evis || jap<mori
  puts "No"
else
  puts "Yes"
end  
