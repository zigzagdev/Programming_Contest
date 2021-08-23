evis = gets.chomp

jap = evis.reverse

evisjap = 0
for i in 0..evis.size do
  if evis[i] != jap[i]
    evisjap += 1
  end
end
p evisjap/2
