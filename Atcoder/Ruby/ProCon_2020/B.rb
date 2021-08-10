mori,yama,kes = gets.split(" ").map &:to_i
fuji = gets.to_i

fuji.times do
  if mori >= yama
    yama *= 2
  elsif yama >= kes
    kes *= 2
  end
end

if mori < yama && yama < kes
  puts 'Yes'
else
  puts 'No'
end  
