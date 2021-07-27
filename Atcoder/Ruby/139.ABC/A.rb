mori = gets.chomp
evis = gets.chomp

yama = mori.split(//)
jap = evis.split(//)

evisjap = 0
3.times do |i|
  if(yama[i] == jap[i])
    evisjap += 1
  end
end
p evisjap
