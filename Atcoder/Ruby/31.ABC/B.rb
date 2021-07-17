kes,moriyama = gets.split(" ").map &:to_i
fuji = gets.to_i

fuji.times do |i|
  evis = gets.to_i
  if(evis<kes)
    puts kes - evis
  elsif(kes<=evis && evis<=moriyama)
    puts '0'
  else
    puts '-1'
  end
end

