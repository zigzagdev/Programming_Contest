evis = gets.to_i
jap = gets.to_i
mori = gets.to_i
yama = gets.to_i

evisjap = 0
for i in 0..evis
  for j in 0..jap
    for k in 0..mori
      if (500*i + 100*j + 50*k == yama)
        evisjap += 1
      end
    end
  end
end
p evisjap
