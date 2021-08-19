mori = gets.to_i
yama = gets.chomp
moriyama = yama.split(//)

evis = []
moriyama.each do |i|
  kes = i
  mori.times do
    if kes == 'Z'
      kes = 'A'
    else
      kes = kes.next
    end
  end
  evis << kes
end
puts evis.join
