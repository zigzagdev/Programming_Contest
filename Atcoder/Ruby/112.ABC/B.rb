evis,jap = gets.split(" ").map &:to_i
min = 2000

evis.times do |i|
  kes,fuji = gets.split(" ").map &:to_i
  if fuji<=jap
    if kes<min
      min = kes
    end
  end
end
if min == 2000 then
  puts 'TLE'
else
  puts min
end 
