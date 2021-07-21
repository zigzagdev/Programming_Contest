kes,moriyama = gets.split(" ").map &:to_i

evis = [1,3,5,7,8,10,12]
jap = [4, 6, 9,11]
evisjap = [2]

if (evis.include?(kes) && evis.include?(moriyama) || jap.include?(kes) && jap.include?(moriyama))
  puts 'Yes'
else
  puts 'No'
end  
