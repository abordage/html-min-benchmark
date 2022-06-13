# HtmlMin Benchmark

Please, suggest other packages to compare!


## Comparison [abordage/html-min](https://github.com/abordage/html-min) with [voku/html-min](https://github.com/voku/HtmlMin)

| benchmark         | subject              | revs | its | mode         | mem_peak |
|-------------------|----------------------|------| --- |--------------|----------|
| TimeConsumerBench | benchAbordageHtmlMin | 100  | 3   | **0.221ms**  | 1.535mb  |
| TimeConsumerBench | benchAbordageHtmlMin | 100  | 3   | **0.223ms**  | 1.535mb  |
| TimeConsumerBench | benchAbordageHtmlMin | 100  | 3   | **0.220ms**  | 1.535mb  |
| TimeConsumerBench | benchVokuHtmlMin     | 100  | 3   | **18.362ms** | 2.404mb  |
| TimeConsumerBench | benchVokuHtmlMin     | 100  | 3   | **18.325ms** | 2.404mb  |
| TimeConsumerBench | benchVokuHtmlMin     | 100  | 3   | **18.395ms** | 2.404mb  |

With almost the same compression level, the speed is orders of magnitude higher.

```bash
# Comparison of Consumed Time
composer test:phpbench

#Comparison of Compression Sizes
composer test:test:run-all-minifiers
```
