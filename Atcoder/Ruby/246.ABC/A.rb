mori = []
yama = []

3.times do |i|
  kes, fuji = gets.split(" ").map &:to_i
   mori.push(kes).tally
   yama.push(fuji).tally
end

evis = mori.select{|v| mori.count(v) == 1}.uniq
jap = yama.select{|v| yama.count(v) == 1}.uniq

evisjap = evis.push(jap)
puts evisjap.join(" ")
