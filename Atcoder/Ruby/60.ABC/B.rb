fuji,kes,moriyama = gets.split(" ").map &:to_i

for i in 1..50 do
  if(2*i*fuji)%kes == moriyama
    puts 'Yes'
    exit
  end
end
puts 'No'
