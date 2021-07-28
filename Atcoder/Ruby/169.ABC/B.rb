kes = gets.to_i
mori = gets.split(" ").map &:to_i

fuji = 1000000000000000000

if(mori.include?(0))
  puts '0'
else
  yama = 1
  mori.each do |i|
    yama *=  i

    if(yama>fuji)
      puts '-1'
      exit
    end
  end
end
puts yama
