evisjap,evis,jap = gets.split(" ").map &:to_i

wakuwaku = 0
evisjap.times do
  kes,mori = gets.split.map(&:to_i)
  if(evis > kes && jap < mori)
    wakuwaku += 1
  end
end

if(wakuwaku > 0 )
  puts 'Yes'
else
  puts 'No'
end  
