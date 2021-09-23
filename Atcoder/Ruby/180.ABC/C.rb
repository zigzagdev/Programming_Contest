kes = gets.to_i

moriyama = []
for i in (1..kes**0.5) do
  if kes%i == 0
    moriyama.push(i)
    moriyama.push(kes/i)
  end
end
puts moriyama.uniq.sort
