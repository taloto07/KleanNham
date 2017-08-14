module Jekyll
  module RandomFilter
    def random(input)
      input.to_a.sample
    end
  end
end

Liquid::Template.register_filter(Jekyll::RandomFilter)